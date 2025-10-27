<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProcessContentResponse
 */
class ProcessContentResponse
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * A collection of policy actions (like DLP actions) triggered by the processed content. NOTE: Currently, the only policy action supported in for this resource type is restrictAccess.
     * @var DlpActionInfo[]
     */
    public array $policyActions = [];

    /** 
     * A collection of errors encountered during the content processing.
     * @var ProcessingError[]
     */
    public array $processingErrors = [];

    /**  */
    public ?ProtectionScopeState $protectionScopeState = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['policyActions'])) {
            $this->policyActions = $data['policyActions'];
        }
        if (isset($data['processingErrors'])) {
            $this->processingErrors = $data['processingErrors'];
        }
        if (isset($data['protectionScopeState'])) {
            $this->protectionScopeState = is_array($data['protectionScopeState']) ? new ProtectionScopeState($data['protectionScopeState']) : $data['protectionScopeState'];
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
