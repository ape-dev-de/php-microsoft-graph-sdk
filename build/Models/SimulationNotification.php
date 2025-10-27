<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationNotification
 */
class SimulationNotification
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The default language for the end user notification. */
    public ?string $defaultLanguage = null;

    /** 
     * 
     * @var EndUserNotification|\stdClass|null
     */
    public EndUserNotification|\stdClass|null $endUserNotification = null;

    /** 
     * Target user type. Possible values are: unknown, clicked, compromised, allUsers, unknownFutureValue.
     * @var TargettedUserType|\stdClass|null
     */
    public TargettedUserType|\stdClass|null $targettedUserType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['defaultLanguage'])) {
            $this->defaultLanguage = $data['defaultLanguage'];
        }
        if (isset($data['endUserNotification'])) {
            $this->endUserNotification = is_array($data['endUserNotification']) ? new EndUserNotification($data['endUserNotification']) : $data['endUserNotification'];
        }
        if (isset($data['targettedUserType'])) {
            $this->targettedUserType = is_array($data['targettedUserType']) ? new TargettedUserType($data['targettedUserType']) : $data['targettedUserType'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
