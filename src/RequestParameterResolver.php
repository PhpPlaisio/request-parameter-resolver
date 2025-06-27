<?php
declare(strict_types=1);

namespace Plaisio\RequestParameterResolver;

/**
 * Interface for RequestParameterResolvers. A RequestParameterResolver resolves the CGI parameters from a clean URL.
 */
interface RequestParameterResolver
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Resolves the CGI parameters of a clean URL and returns all CGI parameters.
   *
   * @param string $requestUri The requested relative URL. The query part must be ignored.
   *
   * @return array
   * @api
   * @since 2.0.0
   */
  public function resolveRequestParameters(string $requestUri): array;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
