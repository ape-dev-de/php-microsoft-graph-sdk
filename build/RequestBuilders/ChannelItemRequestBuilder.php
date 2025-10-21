<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Channel;

/**
 * Request builder for individual Channel item
 */
class ChannelItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Channel item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Channel
     */
    public function get(?array $queryParameters = null): Channel
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Channel::class);
    }

}
