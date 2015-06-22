$(document).ready(function() {
    Thermostat = {
        init : function(simulatorThermostatSettings) {
            var length = Object.keys(simulatorThermostatSettings).length;
            var containerWidth = 100/length;
            var content = $('.cards')[0].outerHTML;
            $('.cards').remove();

            for (var thermostat in simulatorThermostatSettings) {
                var currentThermostat = simulatorThermostatSettings[thermostat];
                var id = currentThermostat.device_id;
                $('body').prepend("<div id='" + id + "' class='top-card-container'>" + content + "</div>");
                $('#' + id + ' h1.card-title').html(currentThermostat.name);
                $('#' + id + ' .temperature-container span:first').html(currentThermostat.target_temperature);
                $('#' + id + ' #current-temp').html('Current Temp ' + currentThermostat.ambient_temperature);
                Thermostat.checkHvacState(currentThermostat);
            }

            $('.cards .card').css('width', containerWidth + "%");

            if (length > 0) {
                $('body').fadeIn('slow');
            }

            $('.cards .temperature-display .down-control').on('click', function() {
                var id = $(this).parents('.top-card-container').attr('id');
                $('#' + id + ' .temperature-container span:first').html(Thermostat.decreaseTargetTemperature(simulatorThermostatSettings[id]));
            });

            $('.cards .temperature-display .up-control').on('click', function() {
                var id = $(this).parents('.top-card-container').attr('id');
                $('#' + id + ' .temperature-container span:first').html(Thermostat.increaseTargetTemperature(simulatorThermostatSettings[id]));
            });
        },
        setAmbientTemperature : function() {
            $('#current-temp').html('Current Temp ' + this.ambient_temperature);
        },
        getTemperatureHistory : function() {
            $.get("http://192.168.10.10/thermostat/temperaturehistory", function(data) {
                console.log(data);
            });
        },
        increaseTargetTemperature : function(thermostat) {
            if (thermostat.target_temperature <= 89) {
                thermostat.target_temperature += 1;
            }

            this.updateTargetTemperature(thermostat);
            this.checkHvacState(thermostat);

            return thermostat.target_temperature;
        },
        decreaseTargetTemperature : function(thermostat) {
            if (thermostat.target_temperature >= 61) {
                thermostat.target_temperature -= 1;
            }

            this.updateTargetTemperature(thermostat);
            this.checkHvacState(thermostat);

            return thermostat.target_temperature;
        },
        updateTargetTemperature : function(thermostat) {
            $.get("http://192.168.10.10/thermostatSimulator/changeTemperature/" + thermostat.device_id + "/" + thermostat.target_temperature);
        },
        getTargetTemperature : function() {
          return this.target_temperature;
        },
        checkHvacState : function(thermostat) {
            if (thermostat.target_temperature >= thermostat.ambient_temperature && thermostat.hvac_state == 'cooling') {
                $('#' + thermostat.device_id + ' .cards .card.type-thermostat').removeClass('thermostat-cooling')
            }

            if (thermostat.hvac_state == 'cooling') {
                if (thermostat.target_temperature >= thermostat.ambient_temperature) {
                    $('#' + thermostat.device_id + ' .cards .card.type-thermostat').removeClass('thermostat-cooling');
                } else {
                    $('#' + thermostat.device_id + ' .cards .card.type-thermostat').addClass('thermostat-cooling');
                }
                $('#' + thermostat.device_id + ' .halo-text.dial-label').html('COOL SET TO');
                $('#' + thermostat.device_id + ' .temperature-container span').show();

            } else if (thermostat.hvac_state == 'heating') {
                if (thermostat.target_temperature >= thermostat.ambient_temperature) {
                    $('#' + thermostat.device_id + ' .cards .card.type-thermostat').addClass('thermostat-heating');
                } else {
                    $('#' + thermostat.device_id + ' .cards .card.type-thermostat').removeClass('thermostat-heating');
                }

                $('#' + thermostat.device_id + ' .halo-text.dial-label').html('HEAT SET TO');
                $('#' + thermostat.device_id + ' .temperature-container span').show();
            } else {
                $('#' + thermostat.device_id + ' .cards .card.type-thermostat').removeClass('thermostat-cooling').removeClass('thermostat-heating');
                $('#' + thermostat.device_id + ' .halo-text.dial-label').html('OFF');
                $('#' + thermostat.device_id + ' .temperature-container span').hide();

            }
        }
    };

    Thermostat.init(simulatorThermostatSettings);
});
