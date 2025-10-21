<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SectionGroup;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\SectionGroupQueryOptions;

/**
 * Request builder for SectionGroup
 */
class ParentSectionGroupRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param SectionGroupQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return SectionGroup
     */
    public function get(?SectionGroupQueryOptions $options = null, ?array $queryParameters = null): SectionGroup
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, SectionGroup::class);
    }

}
