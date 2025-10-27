<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsItemIdResolver
 */
class ExternalConnectorsItemIdResolver
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The priority which defines the sequence in which the urlToItemResolverBase instances are evaluated. */
    public ?float $priority = null;

    /** Pattern that specifies how to form the ID of the external item that the URL represents. The named groups from the regular expression in urlPattern within the urlMatchInfo can be referenced by inserting the group name inside curly brackets. */
    public ?string $itemId = null;

    /** 
     * Configurations to match and resolve URL.
     * @var ExternalConnectorsUrlMatchInfo|\stdClass|null
     */
    public ExternalConnectorsUrlMatchInfo|\stdClass|null $urlMatchInfo = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['priority'])) {
            $this->priority = is_numeric($data['priority']) ? (float)$data['priority'] : $data['priority'];
        }
        if (isset($data['itemId'])) {
            $this->itemId = $data['itemId'];
        }
        if (isset($data['urlMatchInfo'])) {
            $this->urlMatchInfo = is_array($data['urlMatchInfo']) ? new ExternalConnectorsUrlMatchInfo($data['urlMatchInfo']) : $data['urlMatchInfo'];
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
