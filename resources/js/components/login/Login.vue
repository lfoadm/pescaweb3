<template>
    <v-container>
        <v-form v-on:submit.prevent="login">
            <v-text-field
                v-model="form.email"
                label="E-mail"
                type="email"
                required
            ></v-text-field>

            <v-text-field
                v-model="form.password"
                type="password"
                label="Senha"
                required
            ></v-text-field>

            <v-btn color="success" class="mr-4" type="submit">
                Entrar
            </v-btn>

            <router-link to="/signup">
                <v-btn color="primary" class="mr-2" type="submit">
                    Registrar
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
                email: null,
                password: null
            }
        };
    },
    created(){
        if (User.loggedIn()) {
            this.$router.push({name: 'fish'})
        }
    },
    methods: {
        login() {
            User.login(this.form);
        }
    }
};
</script>

<style></style>
