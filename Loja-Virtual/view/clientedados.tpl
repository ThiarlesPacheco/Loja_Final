<style>
label{
    color: #ef7819;
    font-size: 14pt;
    text-align: left;
    display: block;
}
</style>
<section class="contact" id="contact">

    <h1 class="heading"> <span>Meus</span> Dados </h1>

    <div class="row">
        <form name="cliente_login" method="post" action="" class="flex flex-col">

        <div class="flex  justify-between gap-4">
            <div style="width: 50%;">
                <label for="cli_nome">Nome</label>
                <input data-aos="zoom-in" type="text" value="{$CLI_NOME}" class="box" name="cli_nome" id="cli_nome">
            </div>
            <div style="width: 50%;">
                <label for="cli_sobrenome">Sobrenome</label>
                <input data-aos="zoom-in" type="text" value="{$CLI_SOBRENOME}" class="box" name="cli_sobrenome" id="cli_sobrenome">
            </div>
        </div>
        
        <div class="flex  justify-between gap-4">
            <div style="width: 20%;">
                <label for="cli_data_nasc">Data Nascimento</label>
                <input data-aos="zoom-in" type="date" value="{$CLI_DATA_NASC}" class="box" name="cli_data_nasc" id="cli_data_nasc">
            </div>
            <div style="width: 20%;">
                <label for="cli_rg">RG</label>
                <input data-aos="zoom-in" type="text" value="{$CLI_RG}" class="box" name="cli_rg" id="cli_rg">
            </div>

            <div style="width: 20%;">
                <label for="cli_cpf">CPF</label>
                <input data-aos="zoom-in" type="text" value="{$CLI_CPF}" class="box" name="cli_cpf" id="cli_cpf" readonly>
            </div>

            <div style="width: 20%;">
                <label for="cli_ddd">DDD</label>
                <input data-aos="zoom-in" type="text" value="{$CLI_DDD}" class="box" name="cli_ddd" id="cli_ddd" required>
            </div>

            <div style="width: 20%;">
                <label for="cli_fone">Telefone</label>
                <input data-aos="zoom-in" type="text" value="{$CLI_FONE}" placeholder="Telefone" class="box" name="cli_fone" id="cli_fone" required>
            </div>
        </div>
        <div class="flex  justify-between gap-4">
            <div style="width: 100%;">
                <label for="cli_celular">Celular</label>
                <input data-aos="zoom-in" type="number" value="{$CLI_CELULAR}" class="box" name="cli_celular" id="cli_celular" required>
            </div>
        </div>
        <div class="flex  justify-between gap-4">
            <div style="width: 50%;">
                <label for="cli_endereco">Endereço</label>
                <input data-aos="zoom-in" type="text" value="{$CLI_ENDERECO}" class="box" name="cli_endereco" id="cli_endereco" required>
            </div>
            <div style="width: 50%;">
                <label for="cli_numero">Número</label>
                <input data-aos="zoom-in" type="text" value="{$CLI_NUMERO}" class="box" name="cli_numero" id="cli_numero" required>
            </div>
        </div>
        <div class="flex  justify-between gap-4">
            <div style="width: 50%;">
                <label for="cli_bairro">Bairro</label>
                <input data-aos="zoom-in" type="text" value="{$CLI_BAIRRO}" class="box" name="cli_bairro" id="cli_bairro" required>
            </div>

            <div style="width: 50%;">
                <label for="cli_cidade">Cidade</label>
                <input data-aos="zoom-in" type="text" value="{$CLI_CIDADE}" class="box" name="cli_cidade" id="cli_cidade" required>
            </div>
        </div>
        <div class="flex  justify-between gap-4">
            <div style="width: 50%;">
                <label for="cli_uf">UF</label>
                <input data-aos="zoom-in" type="text" value="{$CLI_UF}" class="box" name="cli_uf" id="cli_uf" required>
            </div>

            <div style="width: 50%;">
                <label for="cli_cep">CEP</label>
                <input data-aos="zoom-in" type="text" value="{$CLI_CEP}" class="box" name="cli_cep" id="cli_cep" required>
            </div>
        </div>
        <div class="flex  justify-between gap-4">
            <div style="width: 50%;">
                <label for="cli_email">Email</label>
                <input data-aos="zoom-in" type="email" value="{$CLI_EMAIL}" placeholder="Email" class="box" name="cli_email" id="cli_email" readonly>
            </div>

            <div style="width: 50%;">
                <label for="cli_senha">Senha (Digite sua senha atual por segurança)</label>
                <input data-aos="zoom-in" type="password" placeholder=" (Ela não será alterada)" class="box" name="cli_senha" id="cli_senha" required>
            </div>
        </div>
        
        <div>
            <input data-aos="zoom-in" type="submit" value="Gravar" class="btn">
        </div>

        </form>

    </div>

</section>
