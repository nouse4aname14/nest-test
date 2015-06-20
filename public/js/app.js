$(document).ready(function() {
    Thermostat = {
        temperature : 0,
        init : function(settings) {
            this.name = settings.name;
            this.target_temperature = settings.target_temperature;
            this.ambient_temperature = settings.ambient_temperature;
            this.hvac_state = settings.hvac_state;

            this.checkHvacState();
            this.setAmbientTemperature();
        },
        setAmbientTemperature : function() {
            $('#current-temp').html('Current Temp ' + this.ambient_temperature);
        },
        increaseTargetTemperature : function() {
            if (this.target_temperature <= 89) {
                this.target_temperature += 1;
            }

            if (this.target_temperature >= this.ambient_temperature) {
                this.hvac_state = 'off';
                this.checkHvacState();
            }

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

            return this.target_temperature;
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