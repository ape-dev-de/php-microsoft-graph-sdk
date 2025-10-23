<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CommunicationsIdentitySet
 */
class CommunicationsIdentitySet
{
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
        if (isset($data['application'])) {
            $this->application = $data['application'];
        }
        if (isset($data['device'])) {
            $this->device = $data['device'];
        }
        if (isset($data['user'])) {
            $this->user = $data['user'];
        }
        if (isset($data['applicationInstance'])) {
            $this->applicationInstance = $data['applicationInstance'];
        }
        if (isset($data['assertedIdentity'])) {
            $this->assertedIdentity = $data['assertedIdentity'];
        }
        if (isset($data['azureCommunicationServicesUser'])) {
            $this->azureCommunicationServicesUser = $data['azureCommunicationServicesUser'];
        }
        if (isset($data['encrypted'])) {
            $this->encrypted = $data['encrypted'];
        }
        if (isset($data['endpointType'])) {
            $this->endpointType = $data['endpointType'];
        }
        if (isset($data['guest'])) {
            $this->guest = $data['guest'];
        }
        if (isset($data['onPremises'])) {
            $this->onPremises = $data['onPremises'];
        }
        if (isset($data['phone'])) {
            $this->phone = $data['phone'];
        }
    }
}
