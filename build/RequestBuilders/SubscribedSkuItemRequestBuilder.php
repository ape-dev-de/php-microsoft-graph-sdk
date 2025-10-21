<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SubscribedSku;

/**
 * Request builder for individual SubscribedSku item
 */
class SubscribedSkuItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get SubscribedSku item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return SubscribedSku
     */
    public function get(?array $queryParameters = null): SubscribedSku
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, SubscribedSku::class);
    }

    /**
     * Update SubscribedSku item
     *
     * @param SubscribedSku $item The item with updated properties
     * @return SubscribedSku
     */
    public function patch(SubscribedSku $item): SubscribedSku
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, SubscribedSku::class);
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
