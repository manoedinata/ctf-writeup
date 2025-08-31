```
# DISKO 1

Can you find the flag in this disk image?
```

Nothing special; just get `strings` from the extracted disk image.
No mount needed (yet. Dawg I mounted it while there is a way simpler solution.)

```bash
wget https://artifacts.picoctf.net/c/537/disko-1.dd.gz
gunzip disko-1.dd.gz

strings disko-1.dd | grep picoCTF
```

Flag:

```
picoCTF{1t5_ju5t_4_5tr1n9_be6031da}
```
