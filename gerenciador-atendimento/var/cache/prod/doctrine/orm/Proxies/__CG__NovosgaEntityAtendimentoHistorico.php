<?php

namespace Proxies\__CG__\Novosga\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class AtendimentoHistorico extends \Novosga\Entity\AtendimentoHistorico implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Novosga\\Entity\\AtendimentoHistorico' . "\0" . 'codificados', 'id', 'unidade', 'servico', 'usuario', 'usuarioTriagem', 'local', 'dataAgendamento', 'dataChegada', 'dataChamada', 'status', 'resolucao', 'cliente', 'senha', 'pai', 'observacao'];
        }

        return ['__isInitialized__', '' . "\0" . 'Novosga\\Entity\\AtendimentoHistorico' . "\0" . 'codificados', 'id', 'unidade', 'servico', 'usuario', 'usuarioTriagem', 'local', 'dataAgendamento', 'dataChegada', 'dataChamada', 'status', 'resolucao', 'cliente', 'senha', 'pai', 'observacao'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (AtendimentoHistorico $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getCodificados()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodificados', []);

        return parent::getCodificados();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodificados(\Doctrine\Common\Collections\Collection $codificados)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodificados', [$codificados]);

        return parent::setCodificados($codificados);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnidade()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnidade', []);

        return parent::getUnidade();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnidade($unidade)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnidade', [$unidade]);

        return parent::setUnidade($unidade);
    }

    /**
     * {@inheritDoc}
     */
    public function getServico()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getServico', []);

        return parent::getServico();
    }

    /**
     * {@inheritDoc}
     */
    public function setServico($servico)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setServico', [$servico]);

        return parent::setServico($servico);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuario', []);

        return parent::getUsuario();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuario($usuario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuario', [$usuario]);

        return parent::setUsuario($usuario);
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuarioTriagem(\Novosga\Entity\Usuario $usuario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuarioTriagem', [$usuario]);

        return parent::setUsuarioTriagem($usuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuarioTriagem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuarioTriagem', []);

        return parent::getUsuarioTriagem();
    }

    /**
     * {@inheritDoc}
     */
    public function getLocal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocal', []);

        return parent::getLocal();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocal($local)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocal', [$local]);

        return parent::setLocal($local);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataAgendamento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataAgendamento', []);

        return parent::getDataAgendamento();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataAgendamento(\DateTime $dataAgendamento = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataAgendamento', [$dataAgendamento]);

        return parent::setDataAgendamento($dataAgendamento);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataChegada()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataChegada', []);

        return parent::getDataChegada();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataChegada(\DateTime $dataChegada = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataChegada', [$dataChegada]);

        return parent::setDataChegada($dataChegada);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataChamada()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataChamada', []);

        return parent::getDataChamada();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataChamada(\DateTime $dataChamada = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataChamada', [$dataChamada]);

        return parent::setDataChamada($dataChamada);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataInicio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataInicio', []);

        return parent::getDataInicio();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataInicio(\DateTime $dataInicio = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataInicio', [$dataInicio]);

        return parent::setDataInicio($dataInicio);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataFim()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataFim', []);

        return parent::getDataFim();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataFim(\DateTime $dataFim = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataFim', [$dataFim]);

        return parent::setDataFim($dataFim);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getResolucao()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResolucao', []);

        return parent::getResolucao();
    }

    /**
     * {@inheritDoc}
     */
    public function setResolucao($resolucao)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResolucao', [$resolucao]);

        return parent::setResolucao($resolucao);
    }

    /**
     * {@inheritDoc}
     */
    public function setCliente(\Novosga\Entity\Cliente $cliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCliente', [$cliente]);

        return parent::setCliente($cliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getPai()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPai', []);

        return parent::getPai();
    }

    /**
     * {@inheritDoc}
     */
    public function setPai($pai)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPai', [$pai]);

        return parent::setPai($pai);
    }

    /**
     * {@inheritDoc}
     */
    public function setTempoEspera(\DateInterval $tempoEspera)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTempoEspera', [$tempoEspera]);

        return parent::setTempoEspera($tempoEspera);
    }

    /**
     * {@inheritDoc}
     */
    public function getTempoEspera()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTempoEspera', []);

        return parent::getTempoEspera();
    }

    /**
     * {@inheritDoc}
     */
    public function setTempoPermanencia(\DateInterval $tempoPermanencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTempoPermanencia', [$tempoPermanencia]);

        return parent::setTempoPermanencia($tempoPermanencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getTempoPermanencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTempoPermanencia', []);

        return parent::getTempoPermanencia();
    }

    /**
     * {@inheritDoc}
     */
    public function setTempoAtendimento(\DateInterval $tempoAtendimento = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTempoAtendimento', [$tempoAtendimento]);

        return parent::setTempoAtendimento($tempoAtendimento);
    }

    /**
     * {@inheritDoc}
     */
    public function getTempoAtendimento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTempoAtendimento', []);

        return parent::getTempoAtendimento();
    }

    /**
     * {@inheritDoc}
     */
    public function setTempoDeslocamento(\DateInterval $tempoDeslocamento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTempoDeslocamento', [$tempoDeslocamento]);

        return parent::setTempoDeslocamento($tempoDeslocamento);
    }

    /**
     * {@inheritDoc}
     */
    public function getTempoDeslocamento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTempoDeslocamento', []);

        return parent::getTempoDeslocamento();
    }

    /**
     * {@inheritDoc}
     */
    public function getCliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCliente', []);

        return parent::getCliente();
    }

    /**
     * {@inheritDoc}
     */
    public function getSenha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSenha', []);

        return parent::getSenha();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrioridade()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrioridade', []);

        return parent::getPrioridade();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrioridade(\Novosga\Entity\Prioridade $prioridade)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrioridade', [$prioridade]);

        return parent::setPrioridade($prioridade);
    }

    /**
     * {@inheritDoc}
     */
    public function getObservacao()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObservacao', []);

        return parent::getObservacao();
    }

    /**
     * {@inheritDoc}
     */
    public function setObservacao($observacao)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObservacao', [$observacao]);

        return parent::setObservacao($observacao);
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'jsonSerialize', []);

        return parent::jsonSerialize();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
