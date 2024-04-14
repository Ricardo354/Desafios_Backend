# Validação de Senha Segura

O objetivo deste desafio é implementar um serviço que valide se uma senha é considerada segura com base em critérios pré-definidos.

## Exemplo de Requisição

Seu serviço deve receber uma chamada para validar uma senha através de uma requisição POST para o endpoint `{{host}}/validate-password`.

```json
{
    "password": "vYQIYxO&p$yfI^r"
}
```

Se a senha atender a todos os critérios de segurança, o serviço deve retornar uma resposta de sucesso com o status HTTP 204 No Content.

Caso contrário, o serviço deve retornar uma mensagem informando quais critérios não foram atendidos. A estrutura para as mensagens de erro fica a critério do desenvolvedor.

## Requisitos de Segurança da Senha

- Verificar se a senha possui pelo menos 08 caracteres.
- Verificar se a senha contém pelo menos uma letra maiúscula.
- Verificar se a senha contém pelo menos uma letra minúscula.
- Verificar se a senha contém pelo menos um dígito numérico.
- Verificar se a senha contém pelo menos um caractere especial (e.g, !@#$%).

## Resposta de Sucesso

Status HTTP: 204 No Content

## Resposta de Erro

Status HTTP: 400 Bad Request

```json
{
    "message": "..."
}
```

Desafio do: https://github.com/backend-br/desafios/tree/master
