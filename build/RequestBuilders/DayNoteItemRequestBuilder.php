<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DayNote;

/**
 * Request builder for individual DayNote item
 */
class DayNoteItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get DayNote item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return DayNote
     */
    public function get(?array $queryParameters = null): DayNote
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, DayNote::class);
    }

    /**
     * Update DayNote item
     *
     * @param DayNote $item The item with updated properties
     * @return DayNote
     */
    public function patch(DayNote $item): DayNote
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, DayNote::class);
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
