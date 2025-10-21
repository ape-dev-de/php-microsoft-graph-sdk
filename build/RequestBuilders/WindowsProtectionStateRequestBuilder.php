<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WindowsProtectionState;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\WindowsProtectionStateQueryOptions;

/**
 * Request builder for WindowsProtectionState
 */
class WindowsProtectionStateRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $filter: Filter results
     * - $orderby: Order results
     * - $top: Limit number of results
     * - $skip: Skip number of results
     * - $expand: Expand related resources
     * - $search: Search query
     * - $count: Include count of items
     *
     * @param WindowsProtectionStateQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return WindowsProtectionState
     */
    public function get(?WindowsProtectionStateQueryOptions $options = null, ?array $queryParameters = null): WindowsProtectionState
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, WindowsProtectionState::class);
    }

    /**
     * Create a new WindowsProtectionState
     *
     * @param WindowsProtectionState $item The item to create
     * @return WindowsProtectionState
     */
    public function post(WindowsProtectionState $item): WindowsProtectionState
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, WindowsProtectionState::class);
    }
    /**
     * Get detectedMalwareState request builder
     *
     * @return DetectedMalwareStateRequestBuilder
     */
    public function detectedMalwareState(): DetectedMalwareStateRequestBuilder
    {
        return new DetectedMalwareStateRequestBuilder($this->client, $this->buildPath('detectedMalwareState'));
    }

}
