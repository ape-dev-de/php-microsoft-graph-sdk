<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Solution;

/**
 * Request builder for individual Solution item
 */
class SolutionItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Solution item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Solution
     */
    public function get(?array $queryParameters = null): Solution
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Solution::class);
    }

    /**
     * Update Solution item
     *
     * @param Solution $item The item with updated properties
     * @return Solution
     */
    public function patch(Solution $item): Solution
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Solution::class);
    }

    /**
     * Delete item
     *
     * @return void
     */
    public function delete(): void
    {
        $this->client->delete($this->getFullPath());
    }

}
