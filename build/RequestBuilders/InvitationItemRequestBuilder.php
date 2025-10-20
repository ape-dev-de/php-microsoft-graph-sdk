<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Invitation;

/**
 * Request builder for individual Invitation item
 */
class InvitationItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Invitation item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Invitation
     */
    public function get(?array $queryParameters = null): Invitation
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Invitation::class);
    }

    /**
     * Update Invitation item
     *
     * @param Invitation $item The item with updated properties
     * @return Invitation
     */
    public function patch(Invitation $item): Invitation
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Invitation::class);
    }

}
