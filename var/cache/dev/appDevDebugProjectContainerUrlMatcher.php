<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        // insert
        if ('/insert' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::insertAction',  '_route' => 'insert',);
        }

        if (0 === strpos($pathinfo, '/formations')) {
            if (0 === strpos($pathinfo, '/formations/create')) {
                // create_formations
                if ('/formations/create' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\FormationsController::createAction',  '_route' => 'create_formations',);
                }

                // validate_create_formations
                if ('/formations/create_valid' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_validate_create_formations;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\FormationsController::validateLoisirsAction',  '_route' => 'validate_create_formations',);
                }
                not_validate_create_formations:

            }

            elseif (0 === strpos($pathinfo, '/formations/edit')) {
                // edit_formations
                if (preg_match('#^/formations/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_formations')), array (  '_controller' => 'AppBundle\\Controller\\FormationsController::editAction',));
                }

                // validate_edit_formations
                if (0 === strpos($pathinfo, '/formations/edit_valid') && preg_match('#^/formations/edit_valid/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_validate_edit_formations;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'validate_edit_formations')), array (  '_controller' => 'AppBundle\\Controller\\FormationsController::validateEditFormationsAction',));
                }
                not_validate_edit_formations:

            }

            // delete_formations
            if (0 === strpos($pathinfo, '/formations/delete') && preg_match('#^/formations/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_formations')), array (  '_controller' => 'AppBundle\\Controller\\FormationsController::deleteFormationsAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/loisirs')) {
            if (0 === strpos($pathinfo, '/loisirs/create')) {
                // create_loisirs
                if ('/loisirs/create' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\LoisirsController::createAction',  '_route' => 'create_loisirs',);
                }

                // validate_create_loisir
                if ('/loisirs/create_valid' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_validate_create_loisir;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\LoisirsController::validateLoisirsAction',  '_route' => 'validate_create_loisir',);
                }
                not_validate_create_loisir:

            }

            elseif (0 === strpos($pathinfo, '/loisirs/edit')) {
                // edit_loisirs
                if (preg_match('#^/loisirs/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_loisirs')), array (  '_controller' => 'AppBundle\\Controller\\LoisirsController::editAction',));
                }

                // validate_edit_loisir
                if (0 === strpos($pathinfo, '/loisirs/edit_valid') && preg_match('#^/loisirs/edit_valid/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_validate_edit_loisir;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'validate_edit_loisir')), array (  '_controller' => 'AppBundle\\Controller\\LoisirsController::validateEditLoisirsAction',));
                }
                not_validate_edit_loisir:

            }

            // delete_loisirs
            if (0 === strpos($pathinfo, '/loisirs/delete') && preg_match('#^/loisirs/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_loisirs')), array (  '_controller' => 'AppBundle\\Controller\\LoisirsController::deleteLoisirsAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/api')) {
            // api_entrypoint
            if (preg_match('#^/api(?:/(?P<index>index)(?:\\.(?P<_format>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_entrypoint')), array (  '_controller' => 'api_platform.action.entrypoint',  '_format' => '',  '_api_respond' => '1',  'index' => 'index',));
            }

            // api_doc
            if (0 === strpos($pathinfo, '/api/docs') && preg_match('#^/api/docs(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_doc')), array (  '_controller' => 'api_platform.action.documentation',  '_api_respond' => '1',  '_format' => '',));
            }

            // api_jsonld_context
            if (0 === strpos($pathinfo, '/api/contexts') && preg_match('#^/api/contexts/(?P<shortName>.+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_jsonld_context')), array (  '_controller' => 'api_platform.jsonld.action.context',  '_api_respond' => '1',  '_format' => 'jsonld',));
            }

            if (0 === strpos($pathinfo, '/api/competences')) {
                // api_competences_get_collection
                if (preg_match('#^/api/competences(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_competences_get_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_competences_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Competences',  '_api_collection_operation_name' => 'get',));
                }
                not_api_competences_get_collection:

                // api_competences_post_collection
                if (preg_match('#^/api/competences(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_api_competences_post_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_competences_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Competences',  '_api_collection_operation_name' => 'post',));
                }
                not_api_competences_post_collection:

                // api_competences_get_item
                if (preg_match('#^/api/competences/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_competences_get_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_competences_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Competences',  '_api_item_operation_name' => 'get',));
                }
                not_api_competences_get_item:

                // api_competences_put_item
                if (preg_match('#^/api/competences/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_api_competences_put_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_competences_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Competences',  '_api_item_operation_name' => 'put',));
                }
                not_api_competences_put_item:

                // api_competences_delete_item
                if (preg_match('#^/api/competences/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_api_competences_delete_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_competences_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Competences',  '_api_item_operation_name' => 'delete',));
                }
                not_api_competences_delete_item:

            }

            elseif (0 === strpos($pathinfo, '/api/loisirs')) {
                // api_loisirs_get_collection
                if (preg_match('#^/api/loisirs(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_loisirs_get_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_loisirs_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Loisirs',  '_api_collection_operation_name' => 'get',));
                }
                not_api_loisirs_get_collection:

                // api_loisirs_post_collection
                if (preg_match('#^/api/loisirs(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_api_loisirs_post_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_loisirs_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Loisirs',  '_api_collection_operation_name' => 'post',));
                }
                not_api_loisirs_post_collection:

                // api_loisirs_get_item
                if (preg_match('#^/api/loisirs/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_loisirs_get_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_loisirs_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Loisirs',  '_api_item_operation_name' => 'get',));
                }
                not_api_loisirs_get_item:

                // api_loisirs_put_item
                if (preg_match('#^/api/loisirs/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_api_loisirs_put_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_loisirs_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Loisirs',  '_api_item_operation_name' => 'put',));
                }
                not_api_loisirs_put_item:

                // api_loisirs_delete_item
                if (preg_match('#^/api/loisirs/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_api_loisirs_delete_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_loisirs_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Loisirs',  '_api_item_operation_name' => 'delete',));
                }
                not_api_loisirs_delete_item:

            }

            elseif (0 === strpos($pathinfo, '/api/experiences')) {
                // api_experiences_get_collection
                if (preg_match('#^/api/experiences(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_experiences_get_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_experiences_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Experiences',  '_api_collection_operation_name' => 'get',));
                }
                not_api_experiences_get_collection:

                // api_experiences_post_collection
                if (preg_match('#^/api/experiences(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_api_experiences_post_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_experiences_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Experiences',  '_api_collection_operation_name' => 'post',));
                }
                not_api_experiences_post_collection:

                // api_experiences_get_item
                if (preg_match('#^/api/experiences/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_experiences_get_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_experiences_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Experiences',  '_api_item_operation_name' => 'get',));
                }
                not_api_experiences_get_item:

                // api_experiences_put_item
                if (preg_match('#^/api/experiences/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_api_experiences_put_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_experiences_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Experiences',  '_api_item_operation_name' => 'put',));
                }
                not_api_experiences_put_item:

                // api_experiences_delete_item
                if (preg_match('#^/api/experiences/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_api_experiences_delete_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_experiences_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Experiences',  '_api_item_operation_name' => 'delete',));
                }
                not_api_experiences_delete_item:

            }

            elseif (0 === strpos($pathinfo, '/api/formations')) {
                // api_formations_get_collection
                if (preg_match('#^/api/formations(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_formations_get_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_formations_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Formations',  '_api_collection_operation_name' => 'get',));
                }
                not_api_formations_get_collection:

                // api_formations_post_collection
                if (preg_match('#^/api/formations(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_api_formations_post_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_formations_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Formations',  '_api_collection_operation_name' => 'post',));
                }
                not_api_formations_post_collection:

                // api_formations_get_item
                if (preg_match('#^/api/formations/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_formations_get_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_formations_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Formations',  '_api_item_operation_name' => 'get',));
                }
                not_api_formations_get_item:

                // api_formations_put_item
                if (preg_match('#^/api/formations/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_api_formations_put_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_formations_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Formations',  '_api_item_operation_name' => 'put',));
                }
                not_api_formations_put_item:

                // api_formations_delete_item
                if (preg_match('#^/api/formations/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_api_formations_delete_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_formations_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Formations',  '_api_item_operation_name' => 'delete',));
                }
                not_api_formations_delete_item:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
