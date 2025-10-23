<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\EducationAssignment;

/**
 * Request builder for setUpFeedbackResourcesFolder
 */
class SetUpFeedbackResourcesFolderRequestBuilder extends BaseRequestBuilder
{
    /**
     * Invoke action setUpFeedbackResourcesFolder
     * @param EducationAssignment|\stdClass $body Request body
     * @return EducationAssignment|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(EducationAssignment|\stdClass $body): EducationAssignment|\stdClass
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to EducationAssignment|\stdClass
     */
    private function deserializePost(string $body): mixed
    {
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
