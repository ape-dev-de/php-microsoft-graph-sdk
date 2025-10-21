<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\LearningCourseActivity;

/**
 * Request builder for individual LearningCourseActivity item
 */
class LearningCourseActivityItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get LearningCourseActivity item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return LearningCourseActivity
     */
    public function get(?array $queryParameters = null): LearningCourseActivity
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, LearningCourseActivity::class);
    }

}
