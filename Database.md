-Settings:
    -title =>string
    -description =>string
    -address =>string
    -whatsapp =>string
    -phone =>string
    -etc 
========================
-Categories:
    -id =>Int
    -title =>string
    -image 
    -parent =>Int
    -1 categorey --- many products
========================
========================
========================
-Products:
    -id =>int
    -description =>string
    -image
    -main_Price =>decimal
    -main_Discount =>decimal
    -1 products --- many colors
    -1 products --- many sizes
========================
-Product_Color:
    -id =>int
    -color =>hexa
========================
-Product_Size:
    -id =>int
    -size =>int
========================
Product_Color_Size:
    -id =>int 
    -in_Stock =>int
    -price =>decimal
    -discount =>decimal
    -1 product size----many sizes
    -1 product colors----many colors
========================
========================
========================
-Users:
    -id =>int
    -name =>string
    -email =>string
    -type => default=0 is user ---- 1 is admin 
    -1 user---many orders
========================
-User_Adresses:
    -id
    -1 user---many addresses
========================
========================
========================
-Orders:
    -id =>int
    -addresses =>string
    -total =>decimal
========================
-Order_Detail:
    -id =>int
    -price =>decimal
    -number =>int
    -1 Product_color_size---many details
    -1 order---many details
=========================
