<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\BulkUpload;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\BulkUploadQueryOptions;

/**
 * Request builder for BulkUpload
 */
class BulkUploadRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param BulkUploadQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return BulkUpload
     */
    public function get(?BulkUploadQueryOptions $options = null, ?array $queryParameters = null): BulkUpload
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, BulkUpload::class);
    }

}
