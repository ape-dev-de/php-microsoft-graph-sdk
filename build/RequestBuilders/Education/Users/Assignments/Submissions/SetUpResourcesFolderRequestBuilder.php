<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Users\Assignments\Submissions;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\EducationSubmission;

/**
 * Request builder for /education/users/{educationUser-id}/assignments/{educationAssignment-id}/submissions/{educationSubmission-id}/setUpResourcesFolder
 */
class SetUpResourcesFolderRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action setUpResourcesFolder
     * @param EducationSubmission|\stdClass $body Request body
     * @return EducationSubmission|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(EducationSubmission|\stdClass $body): EducationSubmission|\stdClass
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to EducationSubmission|\stdClass
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
        return new EducationSubmission($data);
    }
}
