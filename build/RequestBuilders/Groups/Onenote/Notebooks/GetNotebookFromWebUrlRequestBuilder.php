<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Onenote\Notebooks;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\CopyNotebookModel;

/**
 * Request builder for /groups/{group-id}/onenote/notebooks/getNotebookFromWebUrl
 */
class GetNotebookFromWebUrlRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action getNotebookFromWebUrl
     * @param CopyNotebookModel|\stdClass $body Request body
     * @return CopyNotebookModel|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(CopyNotebookModel|\stdClass $body): CopyNotebookModel|\stdClass
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to CopyNotebookModel|\stdClass
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
        return new CopyNotebookModel($data);
    }
}
