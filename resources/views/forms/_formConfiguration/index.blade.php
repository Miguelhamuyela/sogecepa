
<div class="col-md-4">


    <div class="form-group">
        <label for="facebook">Link do facebook</label>
        <input type="text" name="facebook" id="facebook"
            value="{{ isset($configuration->facebook) ? $configuration->facebook : '' }}"
            class="form-control border-secondary" placeholder="Titulo" required>
    </div>

</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="youtube">Link do youtube</label>
        <input type="text" name="youtube" id="youtube"
            value="{{ isset($configuration->youtube) ? $configuration->youtube : '' }}"
            class="form-control border-secondary" placeholder="youtube" required>
    </div>
</div>
<!-- /.col -->


<div class="col-md-4">
    <div class="form-group">
        <label for="instagram">Link do instagram</label>
        <input type="text" name="instagram" id="instagram"
            value="{{ isset($configuration->instagram) ? $configuration->instagram : '' }}"
            class="form-control border-secondary" placeholder="Instagram" required>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label for="address">Endereço</label>
        <input type="text" name="address" id="address"
            value="{{ isset($configuration->address) ? $configuration->address : '' }}"
            class="form-control border-secondary" placeholder="Endereço" required>
    </div>
</div>


<div class="col-md-4">
    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone"
            value="{{ isset($configuration->telefone) ? $configuration->telefone : '' }}"
            class="form-control border-secondary" placeholder="Telefone" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="email">Link do email</label>
        <input type="text" name="email" id="email"
            value="{{ isset($configuration->email) ? $configuration->email : '' }}"
            class="form-control border-secondary" placeholder="Email" required>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label for="Twitter">Link do linkedin</label>
        <input type="text" name="linkedin" id="Twitter"
            value="{{ isset($configuration->linkedin) ? $configuration->linkedin : '' }}"
            class="form-control border-secondary" placeholder="Twitter" required>
    </div>
</div>
