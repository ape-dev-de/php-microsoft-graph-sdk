<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Directory
 */
class Directory
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Conceptual container for user and group directory objects.
     * @var AdministrativeUnit[]
     */
    public array $administrativeUnits = [];

    /** 
     * Group of related custom security attribute definitions.
     * @var AttributeSet[]
     */
    public array $attributeSets = [];

    /** 
     * Schema of a custom security attributes (key-value pairs).
     * @var CustomSecurityAttributeDefinition[]
     */
    public array $customSecurityAttributeDefinitions = [];

    /** 
     * Recently deleted items. Read-only. Nullable.
     * @var DirectoryObject[]
     */
    public array $deletedItems = [];

    /** 
     * The credentials of the device's local administrator account backed up to Microsoft Entra ID.
     * @var DeviceLocalCredentialInfo[]
     */
    public array $deviceLocalCredentials = [];

    /** 
     * Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol.
     * @var IdentityProviderBase[]
     */
    public array $federationConfigurations = [];

    /** 
     * A container for on-premises directory synchronization functionalities that are available for the organization.
     * @var OnPremisesDirectorySynchronization[]
     */
    public array $onPremisesSynchronization = [];

    /** 
     * The collection of public key infrastructure instances for the certificate-based authentication feature for users in a Microsoft Entra tenant.
     * @var PublicKeyInfrastructureRoot|\stdClass|null
     */
    public mixed $publicKeyInfrastructure = null;

    /** 
     * List of commercial subscriptions that an organization acquired.
     * @var CompanySubscription[]
     */
    public array $subscriptions = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['administrativeUnits'])) {
            $this->administrativeUnits = $data['administrativeUnits'];
        }
        if (isset($data['attributeSets'])) {
            $this->attributeSets = $data['attributeSets'];
        }
        if (isset($data['customSecurityAttributeDefinitions'])) {
            $this->customSecurityAttributeDefinitions = $data['customSecurityAttributeDefinitions'];
        }
        if (isset($data['deletedItems'])) {
            $this->deletedItems = $data['deletedItems'];
        }
        if (isset($data['deviceLocalCredentials'])) {
            $this->deviceLocalCredentials = $data['deviceLocalCredentials'];
        }
        if (isset($data['federationConfigurations'])) {
            $this->federationConfigurations = $data['federationConfigurations'];
        }
        if (isset($data['onPremisesSynchronization'])) {
            $this->onPremisesSynchronization = $data['onPremisesSynchronization'];
        }
        if (isset($data['publicKeyInfrastructure'])) {
            $this->publicKeyInfrastructure = is_array($data['publicKeyInfrastructure']) ? new PublicKeyInfrastructureRoot($data['publicKeyInfrastructure']) : $data['publicKeyInfrastructure'];
        }
        if (isset($data['subscriptions'])) {
            $this->subscriptions = $data['subscriptions'];
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
