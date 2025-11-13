<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\Onenote\Notebooks;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\CopyNotebookModel;

/**
 * Request builder for /groups/{group-id}/sites/{site-id}/onenote/notebooks/getNotebookFromWebUrl
 */
class GetNotebookFromWebUrlRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action getNotebookFromWebUrl
     * @param CopyNotebookModel|\stdClass $body Request body
     * @return CopyNotebookModel|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(CopyNotebookModel|\stdClass $body): CopyNotebookModel|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to CopyNotebookModel|\stdClass|null
     */
    private function deserializePost(string $body): CopyNotebookModel|\stdClass|null    {
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
