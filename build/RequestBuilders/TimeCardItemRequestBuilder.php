<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TimeCard;

/**
 * Request builder for individual TimeCard item
 */
class TimeCardItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get TimeCard item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return TimeCard
     */
    public function get(?array $queryParameters = null): TimeCard
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, TimeCard::class);
    }

    /**
     * Update TimeCard item
     *
     * @param TimeCard $item The item with updated properties
     * @return TimeCard
     */
    public function patch(TimeCard $item): TimeCard
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, TimeCard::class);
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
