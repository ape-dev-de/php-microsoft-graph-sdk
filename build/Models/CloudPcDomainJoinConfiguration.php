<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcDomainJoinConfiguration
 */
class CloudPcDomainJoinConfiguration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Specifies the method by which the provisioned Cloud PC joins Microsoft Entra ID. If you choose the hybridAzureADJoin type, only provide a value for the onPremisesConnectionId property and leave the regionName property empty. If you choose the azureADJoin type, provide a value for either the onPremisesConnectionId or the regionName property. Possible values are: azureADJoin, hybridAzureADJoin, unknownFutureValue.
     * @var CloudPcDomainJoinType|\stdClass|null
     */
    public CloudPcDomainJoinType|\stdClass|null $domainJoinType = null;

    /** The Azure network connection ID that matches the virtual network IT admins want the provisioning policy to use when they create Cloud PCs. You can use this property in both domain join types: Azure AD joined or Hybrid Microsoft Entra joined. If you enter an onPremisesConnectionId, leave the regionName property empty. */
    public ?string $onPremisesConnectionId = null;

    /** 
     * The logical geographic group this region belongs to. Multiple regions can belong to one region group. A customer can select a regionGroup when they provision a Cloud PC, and the Cloud PC is put in one of the regions in the group based on resource status. For example, the Europe region group contains the Northern Europe and Western Europe regions. Possible values are: default, australia, canada, usCentral, usEast, usWest, france, germany, europeUnion, unitedKingdom, japan, asia, india, southAmerica, euap, usGovernment, usGovernmentDOD, unknownFutureValue, norway, switzerland, southKorea. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: norway, switzerland, southKorea. Read-only.
     * @var CloudPcRegionGroup|\stdClass|null
     */
    public CloudPcRegionGroup|\stdClass|null $regionGroup = null;

    /** The supported Azure region where the IT admin wants the provisioning policy to create Cloud PCs. Within this region, the Windows 365 service creates and manages the underlying virtual network. This option is available only when the IT admin selects Microsoft Entra joined as the domain join type. If you enter a regionName, leave the onPremisesConnectionId property empty. */
    public ?string $regionName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['domainJoinType'])) {
            $this->domainJoinType = is_string($data['domainJoinType']) ? CloudPcDomainJoinType::tryFrom($data['domainJoinType']) : $data['domainJoinType'];
        }
        if (isset($data['onPremisesConnectionId'])) {
            $this->onPremisesConnectionId = $data['onPremisesConnectionId'];
        }
        if (isset($data['regionGroup'])) {
            $this->regionGroup = is_string($data['regionGroup']) ? CloudPcRegionGroup::tryFrom($data['regionGroup']) : $data['regionGroup'];
        }
        if (isset($data['regionName'])) {
            $this->regionName = $data['regionName'];
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
