<template>
    <div>
        <v-card color="grey lighten-4" flat height="80px" tile>
            <v-toolbar dense>
                <!-- <v-app-bar-nav-icon></v-app-bar-nav-icon> -->

                <v-toolbar-title>Pescaweb</v-toolbar-title>

                <v-spacer></v-spacer>

                <div class="hidden-sm-and-down">

                    <router-link
                    v-for="item in items"
                    :key="item.title"
                    :to="item.to"
                    v-if="item.show">
                        <v-btn icon>
                            <v-icon>{{item.title}}</v-icon>
                        </v-btn>
                    </router-link>


                    <!-- <router-link to="/fish">
                        <v-btn icon>
                            <v-icon>mdi-home</v-icon>
                        </v-btn>
                    </router-link>

                    <router-link to="/fish">
                        <v-btn icon>
                            <v-icon>mdi-fish</v-icon>
                        </v-btn>
                    </router-link>

                    <router-link to="/fish">
                        <v-btn icon>
                            <v-icon>mdi-filter-variant</v-icon>
                        </v-btn>
                    </router-link>

                    <router-link to="/login">
                        <v-btn icon>
                            <v-icon>mdi-login</v-icon>
                        </v-btn>
                    </router-link> -->


                </div>
            </v-toolbar>
        </v-card>
    </div>
</template>

<script>
export default {
    data(){
        return{
            items: [
                { title: 'mdi-home', to: '/fish', show: true},                
                { title: 'mdi-fish', to: '/comment', show: User.loggedIn()},
                { title: 'mdi-filter-variant', to: '/category', show: User.loggedIn()},
                { title: 'mdi-login', to: '/login', show: !User.loggedIn()},
                { title: 'mdi-logout', to: '/logout', show: User.loggedIn()},
            ]
        }
    },
    created(){
        EventBus.$on('logout', () => {
            User.logout()
        });
    }
}
</script>

<style></style>
