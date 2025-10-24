<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\Onenote\Notebooks;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\CopyNotebookModel;

/**
 * Request builder for /me/onenote/notebooks/getNotebookFromWebUrl
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
        // Convert model to array
        $bodyData = (array)$body;
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
