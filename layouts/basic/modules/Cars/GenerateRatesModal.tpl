{strip}
    <form class="generateRatesModal modal-body js-modal-body mb-0 pt-0" data-js="container" id="changeForm">
        <div class="col-3">
            <label>Data początku eksploatacji: </label>
            <input class="form-control" type="date" id="startDate">
            <input type="hidden" id="id" value="{$ID}">
            <br></br>
            <label>Data końca eksploatacji: </label>
            <input class="form-control" type="date" id="endDate">
            <input type="hidden" id="fuel" value="{$PALIWO}">
        </div>
    </form>
{/strip}