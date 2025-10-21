<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Notebook;

/**
 * Request builder for individual Notebook item
 */
class NotebookItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Notebook item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Notebook
     */
    public function get(?array $queryParameters = null): Notebook
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Notebook::class);
    }

    /**
     * Update Notebook item
     *
     * @param Notebook $item The item with updated properties
     * @return Notebook
     */
    public function patch(Notebook $item): Notebook
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Notebook::class);
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
