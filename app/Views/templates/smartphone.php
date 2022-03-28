<style>
    .smartphone {
        /* topo | direita | inferior | esquerda */
        margin: 20px auto 20px auto;
        width: 291px;
        height: 491px;
        background: #EFEFF0 0% 0% no-repeat padding-box;
        border: 1px solid rgb(38, 50, 56, .2);
        border-radius: 50px;
    }

    .smartphone .border-inside {
        /* topo | direita | inferior | esquerda */
        margin: 10px;
        height: 469px;
        background: #FFFFFF 0% 0% no-repeat padding-box;
        border: 1px solid rgb(38, 50, 56, .2);
        border-radius: 50px;
        font: normal normal normal 12px/18px Roboto;
    }

    .smartphone .top {
        /* topo | direita | inferior | esquerda */
        margin: 10px auto 25px auto;
        width: 30%;
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: space-between;
        align-items: center;
    }

    .smartphone .bar {
        width: 70px;
        height: 5px;
        background: #EFEFF0 0% 0% no-repeat padding-box;
        border: 1px solid rgb(38, 50, 56, .2);
        border-radius: 50px;
    }

    .smartphone .circle {
        width: 5px;
        height: 5px;
        background: #EFEFF0 0% 0% no-repeat padding-box;
        border: 1px solid rgb(38, 50, 56, .2);
        border-radius: 50px;
    }

    .smartphone .content {
        margin: 0px 25px 9px 25px;
        padding: 5px 5px 0px 5px;
        max-height: 400px;
        background: #EFEFF0 0% 0% no-repeat padding-box;
        overflow: auto;
    }
</style>
<div class="smartphone">
    <div class="border-inside">
        <div class="top">
            <div class="bar"></div>
            <div class="circle"></div>
        </div>
        <div id="smartphone-content" class="content">
            {sigla}{nome}, voltar a usar a sua linha de crédito é tão simples como responder a este SMS. Isso mesmo , não precisa de assinar novo contrato e basta responder SIM a esta mensagem para entrarmos em contacto consigo. A reutilização total ou parcial dos {plafond}Eur. Que tem disponíveis não altera a sua mensalidade de {mensalidade}Eur e mantem o limite máximo de {plafond}Eur. Para outros montantes aceda a cofinet.pt ou contacte-nos ou através do chat TAEG{taeg}% para o limite máximo referido, com prazo indicativo de reembolso de {prazo_futuro} meses com TAN de {tan}%. Até breve. STOPSMS sms.em.pt/ahoAD
        </div>
    </div>
</div>