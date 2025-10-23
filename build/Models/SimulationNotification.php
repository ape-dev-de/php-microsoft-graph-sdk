<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationNotification
 */
class SimulationNotification
{
    /** The default language for the end user notification. */
    public ?string $defaultLanguage = null;

    /** 
     * 
     * @var EndUserNotification|\stdClass|null
     */
    public mixed $endUserNotification = null;

    /** 
     * Target user type. Possible values are: unknown, clicked, compromised, allUsers, unknownFutureValue.
     * @var TargettedUserType|\stdClass|null
     */
    public mixed $targettedUserType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
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
}
