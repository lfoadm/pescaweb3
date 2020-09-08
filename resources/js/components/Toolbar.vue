<template>
    <div>
        <v-card color="grey lighten-4" flat height="80px" tile>
            <v-toolbar dense>
                <!-- <v-app-bar-nav-icon></v-app-bar-nav-icon> -->

                <v-toolbar-title>Pescaweb</v-toolbar-title>

                <v-spacer></v-spacer>

                <div>
                    <router-link to="/fish">
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
                    </router-link>
                </div>
            </v-toolbar>
        </v-card>
    </div>
</template>

<script>
export default {};
</script>

<style></style>
