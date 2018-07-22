<?php
declare(strict_types=1);

namespace SetBased\Abc\RequestParameterResolver;

/**
 * Interface for RequestParameterResolvers. A RequestParameterResolver resolves the CGI parameters from a clean URL. Or
 * in other words uncleans a clean URL.
 */
interface RequestParameterResolver
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Resolves the CGI parameters of a clean URL and enhances $_GET accordingly.
   *
   * @return void
   *
   * @api
   * @since 1.0.0
   */
  public function resolveRequestParameters(): void;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
