<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Agreement;

/**
 * Request builder for individual Agreement item
 */
class AgreementItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Agreement item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Agreement
     */
    public function get(?array $queryParameters = null): Agreement
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Agreement::class);
    }

    /**
     * Update Agreement item
     *
     * @param Agreement $item The item with updated properties
     * @return Agreement
     */
    public function patch(Agreement $item): Agreement
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Agreement::class);
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
