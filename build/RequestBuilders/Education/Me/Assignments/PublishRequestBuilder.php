<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Me\Assignments;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\EducationAssignment;

/**
 * Request builder for /education/me/assignments/{educationAssignment-id}/publish
 */
class PublishRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action publish
     * @param EducationAssignment|\stdClass $body Request body
     * @return EducationAssignment|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(EducationAssignment|\stdClass $body): EducationAssignment|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to EducationAssignment|\stdClass|null
     */
    private function deserializePost(string $body): EducationAssignment|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new EducationAssignment($data);
    }
}
