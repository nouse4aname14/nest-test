<?php
namespace App\Domain\HttpClient;

use App\Domain\Traits\HttpResponseTrait;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\ClientException;
use InvalidArgumentException;

/**
 * Class NestClient
 * @package App\Domain\HttpClient
 */
class NestClient
{
    /**
     * @var string
     */
    public $baseUrl = 'https://developer-api.nest.com/';

    /**
     * @var GuzzleClient
     */
    public $client;

    /**
     * @var string
     */
    public $homeAuth = '?auth=c.QrSgngGo0e4ZKBNruMMGCvO3IILvRiJBuEhARmNfxy2uisuKGiR65HgYuIgwv5L5iOh0nH0OHGMma0tpErw0iIlqqzFNj7jYZayvOlFSxnnmuk8kkzoj5y7o2dlHAxPuwTiY5msakQe4SU13';

    /**
     * @var string
     */
    public $simulatorAuth = '?auth=c.riMSgtw6kFV5zJCw7cshII7uYwYAP3FktR7k4RR6brSSVgqv9tPVDxUMiuWZGDDduj5W2QXqyTzFhrWY94j9kfsG0Mt9s1hKkTDK1YJ6CAJdsGzOZKVoeeqlc7IJQzVu8CW5GyNx5VKctOUw';

    /**
     * @var bool
     */
    public $isSimulator = false;

    use HttpResponseTrait;

    /**
     * @param GuzzleClient $client
     */
    public function __construct(GuzzleClient $client)
    {
        $this->client = $client;
    }

    /**
     * Get all devices.
     *
     * @return mixed|string
     */
    public function getAllDevices()
    {
        try {
            $response = $this->toObject($this->client->get($this->makeUri('devices'))->getBody());
        } catch(ClientException $e) {
            $response = $this->respondWithError($e->getMessage(), 404);
        }

        return $response;
    }

    /**
     * Get all thermostats.
     *
     * @return mixed|string
     */
    public function getAllThermostats()
    {
        try {
            $response = $this->toArray($this->client->get($this->makeUri('devices/thermostats'))->getBody()->getContents());
        } catch(ClientException $e) {
            $response = $this->respondWithError($e->getMessage(), 404);
        }

        return $response;
    }

    /**
     * Get the first returned thermostat.
     *
     * @return mixed
     */
    public function getFirstThermostat()
    {
        $devices = $this->getAllThermostats();
        reset($devices);
        return $devices[key($devices)];
    }

    /**
     * Update a thermostats temperature.
     *
     * @param $temperature
     * @param $thermostatId
     *
     * @throws InvalidArgumentException if $temperature is too high or low.
     *
     * @return mixed|string
     */
    public function updateThermostatTemperature($temperature, $thermostatId)
    {
        if ($temperature > 90) {
            throw new InvalidArgumentException('Temperature F value is too high');
        } elseif ($temperature < 60) {
            throw new InvalidArgumentException('Temperature F value is too low');
        }

        try {
            $response = $this->toArray(
                $this->client->patch(
                    $this->makeUri('devices/thermostats/' . $thermostatId),
                    ['json' => ['target_temperature_f' => $temperature]]
                )->getBody()->getContents()
            );
        } catch(ClientException $e) {
            $response = $this->respondWithError($e->getMessage(), 404);
        }

        return $response;
    }

    /**
     * Concatenates uri to make request.
     *
     * @param string $option
     * @return string
     */
    protected function makeUri($option = '')
    {
        $uri = $this->baseUrl . $option;

        if ($this->isSimulator) {
            $uri .= $this->simulatorAuth;
        } else {
            $uri .= $this->homeAuth;
        }

        return $uri;
    }

    /**
     * Transforms an http stream response to an array.
     *
     * @param $data
     * @return mixed
     */
    protected function toArray($data)
    {
        return json_decode($data, true);
    }

    /**
     * Transforms an http stream response to an object.
     *
     * @param $data
     * @return mixed
     */
    protected function toObject($data)
    {
        return json_decode($data);
    }
}
