<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookComment;

/**
 * Request builder for individual WorkbookComment item
 */
class WorkbookCommentItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get WorkbookComment item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return WorkbookComment
     */
    public function get(?array $queryParameters = null): WorkbookComment
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, WorkbookComment::class);
    }

    /**
     * Update WorkbookComment item
     *
     * @param WorkbookComment $item The item with updated properties
     * @return WorkbookComment
     */
    public function patch(WorkbookComment $item): WorkbookComment
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkbookComment::class);
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
