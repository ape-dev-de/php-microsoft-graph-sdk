<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookApplication;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\WorkbookApplicationQueryOptions;

/**
 * Request builder for WorkbookApplication
 */
class ApplicationRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param WorkbookApplicationQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return WorkbookApplication
     */
    public function get(?WorkbookApplicationQueryOptions $options = null, ?array $queryParameters = null): WorkbookApplication
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, WorkbookApplication::class);
    }

    /**
     * Create a new WorkbookApplication
     *
     * @param WorkbookApplication $item The item to create
     * @return WorkbookApplication
     */
    public function post(WorkbookApplication $item): WorkbookApplication
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkbookApplication::class);
    }
    /**
     * Get calculate request builder
     *
     * @return CalculateRequestBuilder
     */
    public function calculate(): CalculateRequestBuilder
    {
        return new CalculateRequestBuilder($this->client, $this->buildPath('calculate'));
    }

}
