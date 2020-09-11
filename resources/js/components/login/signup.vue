<template>
    <v-container>
        <v-form v-on:submit.prevent="signup">
            <v-text-field
                v-model="form.name"
                label="Nome completo"
                type="Nome"
                required
            ></v-text-field>
            <span class="red--text" v-if="errors.name">{{errors.name[0]}}</span>

            <v-text-field
                v-model="form.email"
                label="E-mail"
                type="email"
                required
            ></v-text-field>
            <span class="red--text" v-if="errors.email">{{errors.email[0]}}</span>

            <v-text-field
                v-model="form.password"
                type="password"
                label="Senha"
                required
            ></v-text-field>
            <span class="red--text" v-if="errors.password">{{errors.password[0]}}</span>

            <v-text-field
                v-model="form.password_confirmation"
                type="password"
                label="Confirme sua Senha"
                required
            ></v-text-field>

            <v-btn color="success" class="mr-4" type="submit">
                Registrar
            </v-btn>

            <router-link to="/login">
                <v-btn color="primary" class="mr-2" type="submit">
                    Entrar
                </v-btn>
            </router-link>
        </v-form>
    </v-container>
</template>

<script>
export default {
    data() {
        return {
            form: {
                name: null,
                email: null,
                password: null,
                password_confirmation: null
            },
            errors:{}
        };
    },
    created(){
        if (User.loggedIn()) {
            this.$router.push({name: 'fish'})
        }
    },
    methods: {
        signup() {
            axios
                .post("/api/auth/signup", this.form)
                .then(res => {
                    User.responseAfterLogin(res)
                    this.$router.push({name:'fish'})
                })
                .catch(error => this.errors = error.response.data.errors)
        }
    }
};
</script>

<style></style>
