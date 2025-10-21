<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\OnenoteSection;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\OnenoteSectionQueryOptions;

/**
 * Request builder for OnenoteSection
 */
class ParentSectionRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param OnenoteSectionQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return OnenoteSection
     */
    public function get(?OnenoteSectionQueryOptions $options = null, ?array $queryParameters = null): OnenoteSection
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, OnenoteSection::class);
    }

}
