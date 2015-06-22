$(document).ready(function() {
    Thermostat = {
        temperature : 0,
        init : function(settings) {
            this.name = settings.name;
            this.target_temperature = settings.target_temperature;
            this.ambient_temperature = settings.ambient_temperature;
            this.hvac_state = settings.hvac_state;
            this.device_id = settings.device_id;

            this.checkHvacState();
            this.setAmbientTemperature();

            $('.toolbar-button.history').on('click', function() {
                var id = $(this).parents('.top-card-container').attr('id');
                Thermostat.getTemperatureHistory(id);
            });

        },
        setAmbientTemperature : function() {
            $('#current-temp').html('Current Temp ' + this.ambient_temperature);
        },
        getTemperatureHistory : function(id) {
            $.get("http://" + window.location.host + "/ThermostatSimulator/getAllReportingInformation", function(data) {
                var averageTempReport = data[id].report.averageTempByDay;
                var row = '<h3 style="text-align: center;">Daily Average Thermostat Temperature</h3>';
                var monthNames = ["January", "February", "March", "April", "May", "June",
                    "July", "August", "September", "October", "November", "December"
                ];

                for (var temp in averageTempReport) {
                    var date = new Date((temp.split('-')));
                    var date = monthNames[date.getMonth()] + " " + date.getDay() + " : ";
                    row += '<div style="clear: both;"><div style="float:left">' + date + '</div> <div style="float:right">' + averageTempReport[temp] + 'F </div></div>';
                }

                var chart = "<div>" + row + "</div>"
                $('#popup-content').html(chart);
            });
        },
        increaseTargetTemperature : function() {
            if (this.target_temperature <= 89) {
                this.target_temperature += 1;
            }

            if (this.target_temperature >= this.ambient_temperature) {
                this.hvac_state = 'off';
                this.checkHvacState();
            }

            this.updateTargetTemperature(this.target_temperature);

            return this.target_temperature;
        },
        decreaseTargetTemperature : function() {
            if (this.target_temperature >= 61) {
                this.target_temperature -= 1;
            }

            if (this.target_temperature <= this.ambient_temperature) {
                this.hvac_state = 'cooling';
                this.checkHvacState();
            }

            this.updateTargetTemperature(this.target_temperature);

            return this.target_temperature;
        },
        updateTargetTemperature : function(temp) {
            $.get("http://" + window.location.host + "/thermostat/changeTemperature/" + this.device_id + "/" + temp, function(data) {
                console.log(data);
            });
        },
        getTargetTemperature : function() {
          return this.target_temperature;
        },
        checkHvacState : function() {
            if (this.hvac_state == 'cooling') {
                $('.cards .card.type-thermostat').removeClass('thermostat-heating').addClass('thermostat-cooling');
            } else if (this.hvac_state == 'heating') {
                $('.cards .card.type-thermostat').removeClass('thermostat-cooling').addClass('thermostat-heating');
            } else {
                $('.cards .card.type-thermostat').removeClass('thermostat-cooling').removeClass('thermostat-heating');
            }
        }
    };

    Thermostat.init(currentThermostatSettings);

    $('h1.card-title').html(Thermostat.name);

    $('.temperature-container span:first').html(Thermostat.getTargetTemperature());

    $('.temperature-display .down-control').on('click', function() {
        $('.temperature-container span:first').html(Thermostat.decreaseTargetTemperature());
    });

    $('.temperature-display .up-control').on('click', function() {
        $('.temperature-container span:first').html(Thermostat.increaseTargetTemperature());
    });

});