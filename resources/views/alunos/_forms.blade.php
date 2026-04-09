@csrf

<label for="nome">Nome do aluno</label>
<input
    type="text"
    id="nome"
    name="nome"
    {{-- Old mantem o que foi digitado quando ocorrer erro (Não obrigatório) --}}
    value="{{ old('nome', $aluno->nome ?? '') }}"
    required
>
<label for="cpf">CPF</label>
<input
    type="text"
    id="cpf"
    name="cpf"
    value="{{ old('cpf', $aluno->cpf ?? '') }}"
    required
>
<label for="telefone">Telefone</label>
<input
    type="text"
    id="telefone"
    name="telefone"
    value="{{ old('telefone', $aluno->telefone ?? '') }}"
>
<label for="email">Email</label>
<input
    type="email"
    id="email"
    name="email"
    value="{{ old('email', $aluno->email ?? '') }}"
    required
>
<label for="data_nascimento">Data de Nascimento</label>
<input
    type="date"
    id="data_nascimento"
    name="data_nascimento"
    value="{{ old('data_nascimento', $aluno->data_nascimento ?? '') }}"
>
<label for="status">Status</label>
<select id="status" name="status" required>
    <option value="ativo" {{ old('status', $aluno->status ?? '') === 'ativo' ? 'selected' : '' }}>Ativo</option>
    <option value="inativo" {{ old('status', $aluno->status ?? '') === 'inativo' ? 'selected' : '' }}>Inativo</option>
</select>
   


<label for="descricao">Descricao</label>
<textarea
    id="descricao"
    name="descricao"
    rows="5"
    required
>{{ old('descricao', $aluno->descricao ?? '') }}</textarea>

<button type="submit" class="btn">{{ $buttonText ?? 'Salvar' }}</button>
<a href="{{ route('alunos.index') }}" style="margin-left: 8px;">Cancelar</a>