<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CommunicationsIdentitySet
 */
class CommunicationsIdentitySet
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Optional. The application associated with this action.
     * @var Identity|\stdClass|null
     */
    public mixed $application = null;

    /** 
     * Optional. The device associated with this action.
     * @var Identity|\stdClass|null
     */
    public mixed $device = null;

    /** 
     * Optional. The user associated with this action.
     * @var Identity|\stdClass|null
     */
    public mixed $user = null;

    /** 
     * The application instance associated with this action.
     * @var Identity|\stdClass|null
     */
    public mixed $applicationInstance = null;

    /** 
     * An identity the participant would like to present itself as to the other participants in the call.
     * @var Identity|\stdClass|null
     */
    public mixed $assertedIdentity = null;

    /** 
     * The Azure Communication Services user associated with this action.
     * @var Identity|\stdClass|null
     */
    public mixed $azureCommunicationServicesUser = null;

    /** 
     * The encrypted user associated with this action.
     * @var Identity|\stdClass|null
     */
    public mixed $encrypted = null;

    /** 
     * Type of endpoint that the participant uses. Possible values are: default, voicemail, skypeForBusiness, skypeForBusinessVoipPhone, unknownFutureValue.
     * @var EndpointType|\stdClass|null
     */
    public mixed $endpointType = null;

    /** 
     * The guest user associated with this action.
     * @var Identity|\stdClass|null
     */
    public mixed $guest = null;

    /** 
     * The Skype for Business on-premises user associated with this action.
     * @var Identity|\stdClass|null
     */
    public mixed $onPremises = null;

    /** 
     * The phone user associated with this action.
     * @var Identity|\stdClass|null
     */
    public mixed $phone = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['application'])) {
            $this->application = is_array($data['application']) ? new Identity($data['application']) : $data['application'];
        }
        if (isset($data['device'])) {
            $this->device = is_array($data['device']) ? new Identity($data['device']) : $data['device'];
        }
        if (isset($data['user'])) {
            $this->user = is_array($data['user']) ? new Identity($data['user']) : $data['user'];
        }
        if (isset($data['applicationInstance'])) {
            $this->applicationInstance = is_array($data['applicationInstance']) ? new Identity($data['applicationInstance']) : $data['applicationInstance'];
        }
        if (isset($data['assertedIdentity'])) {
            $this->assertedIdentity = is_array($data['assertedIdentity']) ? new Identity($data['assertedIdentity']) : $data['assertedIdentity'];
        }
        if (isset($data['azureCommunicationServicesUser'])) {
            $this->azureCommunicationServicesUser = is_array($data['azureCommunicationServicesUser']) ? new Identity($data['azureCommunicationServicesUser']) : $data['azureCommunicationServicesUser'];
        }
        if (isset($data['encrypted'])) {
            $this->encrypted = is_array($data['encrypted']) ? new Identity($data['encrypted']) : $data['encrypted'];
        }
        if (isset($data['endpointType'])) {
            $this->endpointType = is_array($data['endpointType']) ? new EndpointType($data['endpointType']) : $data['endpointType'];
        }
        if (isset($data['guest'])) {
            $this->guest = is_array($data['guest']) ? new Identity($data['guest']) : $data['guest'];
        }
        if (isset($data['onPremises'])) {
            $this->onPremises = is_array($data['onPremises']) ? new Identity($data['onPremises']) : $data['onPremises'];
        }
        if (isset($data['phone'])) {
            $this->phone = is_array($data['phone']) ? new Identity($data['phone']) : $data['phone'];
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
