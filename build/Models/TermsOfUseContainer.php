<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermsOfUseContainer
 */
class TermsOfUseContainer
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Represents the current status of a user's response to a company's customizable terms of use agreement.
     * @var AgreementAcceptance[]
     */
    public array $agreementAcceptances = [];

    /** 
     * Represents a tenant's customizable terms of use agreement that's created and managed with Microsoft Entra ID Governance.
     * @var Agreement[]
     */
    public array $agreements = [];


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
        if (isset($data['agreementAcceptances'])) {
            $this->agreementAcceptances = $data['agreementAcceptances'];
        }
        if (isset($data['agreements'])) {
            $this->agreements = $data['agreements'];
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
