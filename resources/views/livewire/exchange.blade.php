<div class="raw">
    <div class="col-6">
        <h2>Обмен Валют</h2>
        <div>
            <select wire:model="rate" class="form-select">
                <option>Выберите валюту</option>
                @foreach($currencies as $currency)
                    <option value="{{ $currency['buy'] }}">{{ $currency['ccy']}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div>
            <div class="input-group has-validation">
                <input wire:model="amount" type="text" class="form-control @if($errors->has('amount')) is-invalid @endif" id="validationServerAmount" aria-describedby="inputGroupPrepend3 validationServerAmountFeedback" required>
                <div id="validationServerAmountFeedback" class="invalid-feedback">
                    {{ $errors->first('amount') }}
                </div>
            </div>
        </div>
        <br>
        <h3>Итого:</h3>
        <div>
            <label for="validationServerResult" class="form-label">UAH</label>
            <div class="input-group has-validation">
                <input wire:model="result" disabled type="text" class="form-control @if($errors->has('result')) is-invalid @endif" id="validationServerResult">
            </div>
        </div>
    </div>
</div>



