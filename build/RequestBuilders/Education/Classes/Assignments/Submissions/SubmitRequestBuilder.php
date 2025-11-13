<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Classes\Assignments\Submissions;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\EducationSubmission;

/**
 * Request builder for /education/classes/{educationClass-id}/assignments/{educationAssignment-id}/submissions/{educationSubmission-id}/submit
 */
class SubmitRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action submit
     * @param EducationSubmission|\stdClass $body Request body
     * @return EducationSubmission|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(EducationSubmission|\stdClass $body): EducationSubmission|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to EducationSubmission|\stdClass|null
     */
    private function deserializePost(string $body): EducationSubmission|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new EducationSubmission($data);
    }
}
