<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // PwebMain_accueil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'PwebMain_accueil');
            }

            return array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::indexAction',  '_route' => 'PwebMain_accueil',);
        }

        if (0 === strpos($pathinfo, '/tri')) {
            if (0 === strpos($pathinfo, '/triprix')) {
                // PwebMain_triprixcroissant
                if ($pathinfo === '/triprixcroissant') {
                    return array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::indextriprixcroissantAction',  '_route' => 'PwebMain_triprixcroissant',);
                }

                // PwebMain_triprixdecroissant
                if ($pathinfo === '/triprixdecroissant') {
                    return array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::indextriprixdecroissantAction',  '_route' => 'PwebMain_triprixdecroissant',);
                }

            }

            // PwebMain_trirecent
            if ($pathinfo === '/trirecent') {
                return array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::indextrirecentAction',  '_route' => 'PwebMain_trirecent',);
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // PwebMain_voir
            if (0 === strpos($pathinfo, '/article') && preg_match('#^/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'PwebMain_voir')), array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::voirAction',));
            }

            // PwebMain_ajouter
            if ($pathinfo === '/ajouter') {
                return array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::ajouterAction',  '_route' => 'PwebMain_ajouter',);
            }

        }

        // PwebMain_modifier
        if (0 === strpos($pathinfo, '/modifier') && preg_match('#^/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'PwebMain_modifier')), array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::modifierAction',));
        }

        // PwebMain_supprimer
        if (0 === strpos($pathinfo, '/supprimer') && preg_match('#^/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'PwebMain_supprimer')), array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::supprimerAction',));
        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/categories')) {
                // PwebMain_ajoutercategories
                if (0 === strpos($pathinfo, '/categories/ajouter') && preg_match('#^/categories/ajouter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'PwebMain_ajoutercategories')), array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::ajoutercategoriesAction',));
                }

                // PwebMain_supprimercategories
                if (0 === strpos($pathinfo, '/categories/supprimer') && preg_match('#^/categories/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'PwebMain_supprimercategories')), array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::supprimercategoriesAction',));
                }

                // PwebMain_categoriesgerer
                if ($pathinfo === '/categories/gerer') {
                    return array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::categoriesgererAction',  '_route' => 'PwebMain_categoriesgerer',);
                }

            }

            if (0 === strpos($pathinfo, '/commandes')) {
                // PwebMain_commandeajouter
                if (0 === strpos($pathinfo, '/commandes/ajouter') && preg_match('#^/commandes/ajouter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'PwebMain_commandeajouter')), array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::commandeajouterAction',));
                }

                // PwebMain_commandesupprimer
                if (0 === strpos($pathinfo, '/commandes/supprimer') && preg_match('#^/commandes/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'PwebMain_commandesupprimer')), array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::commandesupprimerAction',));
                }

                // PwebMain_commandetoutsupprimer
                if ($pathinfo === '/commandes/toutsupprimer') {
                    return array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::commandetoutsupprimerAction',  '_route' => 'PwebMain_commandetoutsupprimer',);
                }

                // PwebMain_statut
                if ($pathinfo === '/commandes/statut') {
                    return array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::statutAction',  '_route' => 'PwebMain_statut',);
                }

                // PwebMain_commandevoirproduits
                if (preg_match('#^/commandes/(?P<idcommande>[^/]++)/panier$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'PwebMain_commandevoirproduits')), array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::commandevoirproduitsAction',));
                }

            }

        }

        // PwebMain_espaceclient
        if ($pathinfo === '/espaceclient') {
            return array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::espaceclientAction',  '_route' => 'PwebMain_espaceclient',);
        }

        // PwebMain_connecter
        if ($pathinfo === '/connecter') {
            return array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::connecterAction',  '_route' => 'PwebMain_connecter',);
        }

        // PwebMain_deconnecter
        if ($pathinfo === '/deconnecter') {
            return array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::deconnecterAction',  '_route' => 'PwebMain_deconnecter',);
        }

        // PwebMain_enregistrer
        if ($pathinfo === '/enregistrer') {
            return array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::enregistrerAction',  '_route' => 'PwebMain_enregistrer',);
        }

        // PwebMain_profileuser
        if ($pathinfo === '/profileuser') {
            return array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::profileuserAction',  '_route' => 'PwebMain_profileuser',);
        }

        // PwebMain_coordonnees
        if ($pathinfo === '/coordonnees') {
            return array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::coordonneesAction',  '_route' => 'PwebMain_coordonnees',);
        }

        if (0 === strpos($pathinfo, '/panier')) {
            // PwebMain_panier
            if ($pathinfo === '/panier') {
                return array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::panierAction',  '_route' => 'PwebMain_panier',);
            }

            // PwebMain_ajouterpanier
            if (0 === strpos($pathinfo, '/panier/ajouter') && preg_match('#^/panier/ajouter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'PwebMain_ajouterpanier')), array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::ajouterproduitaupanierAction',));
            }

        }

        if (0 === strpos($pathinfo, '/initialiser')) {
            // PwebMain_initialiseclear
            if ($pathinfo === '/initialiser/clear') {
                return array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::initialiseclearAction',  '_route' => 'PwebMain_initialiseclear',);
            }

            // PwebMain_initialisetruncatetable
            if ($pathinfo === '/initialiser/truncatetable') {
                return array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::initialisetruncatetableAction',  '_route' => 'PwebMain_initialisetruncatetable',);
            }

            // PwebMain_initialiseproduits
            if ($pathinfo === '/initialiser/produits') {
                return array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::initialiseproduitsAction',  '_route' => 'PwebMain_initialiseproduits',);
            }

            if (0 === strpos($pathinfo, '/initialiser/c')) {
                // PwebMain_initialisecategories
                if ($pathinfo === '/initialiser/categories') {
                    return array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::initialisecategoriesAction',  '_route' => 'PwebMain_initialisecategories',);
                }

                // PwebMain_initialisecommandes
                if ($pathinfo === '/initialiser/commandes') {
                    return array (  '_controller' => 'Pweb\\MainBundle\\Controller\\MainController::initialisecommandesAction',  '_route' => 'PwebMain_initialisecommandes',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/change-password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
