<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AiUser;

/**
 * Request builder for individual AiUser item
 */
class AiUserItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get AiUser item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return AiUser
     */
    public function get(?array $queryParameters = null): AiUser
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, AiUser::class);
    }

    /**
     * Update AiUser item
     *
     * @param AiUser $item The item with updated properties
     * @return AiUser
     */
    public function patch(AiUser $item): AiUser
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, AiUser::class);
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
