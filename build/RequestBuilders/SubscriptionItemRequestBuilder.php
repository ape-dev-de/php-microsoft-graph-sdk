<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Subscription;

/**
 * Request builder for individual Subscription item
 */
class SubscriptionItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Subscription item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Subscription
     */
    public function get(?array $queryParameters = null): Subscription
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Subscription::class);
    }

    /**
     * Update Subscription item
     *
     * @param Subscription $item The item with updated properties
     * @return Subscription
     */
    public function patch(Subscription $item): Subscription
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Subscription::class);
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
