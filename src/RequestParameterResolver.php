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
   * @api
   * @since 2.0.0
   */
  public function resolveRequestParameters(): array;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
